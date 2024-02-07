<?php    
  
    function select_datos($pdo,$tabla,$conditions){
        $query = 'SELECT * FROM '. $tabla . ' WHERE ';

        $whereConditions = [];
        $values = [];
    
        foreach($conditions as $field => $value){
            $whereConditions[] = $field . ' = :' .$field;
            $values[$field] = $value;
        }
    
        $query .= implode(' AND ',$whereConditions);
    
        $stmt = $pdo->prepare($query);
        $stmt->execute($values);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function select_reporte($pdo, $table, $conditions){
        $query = 'SELECT * FROM '. $table;
    
        if (!empty($conditions)) {
            $whereConditions = [];
            $values = [];
    
            foreach ($conditions as $field => $value) {
                $whereConditions[] = $field . ' LIKE :' . $field;
                $values[$field] = '%' . $value . '%';
            }
    
            $query .= ' WHERE ' . implode(' AND ', $whereConditions);
            $stmt = $pdo->prepare($query);
            $stmt->execute($values);
        }else{
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }
    
        
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function calificaciones($pdo, $table, $field, $value){
            
        $query = 'SELECT IFNULL(SUM(aprobado),0) as aprobado, 
                         IFNULL(SUM(reprobado),0) as reprobado, 
                         IFNULL(SUM(en_proceso),0) as en_proceso, 
                         IFNULL(SUM(no_realizado),0) as no_realizado 
                  FROM '. $table .' WHERE '. $field .' = :value' ;
        
        $values = [
            'value' => $value
        ];
        
        $stmt = $pdo->prepare($query);
        $stmt->execute($values);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }

    function all_calificaciones($pdo, $table, $field){
            
        $query = 'SELECT IFNULL(SUM(aprobado),0) as aprobado, 
                         IFNULL(SUM(reprobado),0) as reprobado, 
                         IFNULL(SUM(en_proceso),0) as en_proceso, 
                         IFNULL(SUM(no_realizado),0) as no_realizado 
                  FROM '. $table ;
        
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }

    function datos_tyh($pdo, $conditions){
            
        $query ='SELECT IFNULL(SUM(aprobado),0) as aprobado, 
                    IFNULL(SUM(reprobados),0) as reprobado, 
                    IFNULL(SUM(con_calificacion),0) as con_calificacion, 
                    IFNULL(SUM(no_cursaron),0) as no_cursaron FROM transversales'; 
                    
        if (!empty($conditions)) {
            $whereConditions = [];
            $values = [];
                
            foreach ($conditions as $field => $value) {
                $whereConditions[] = $field . ' = :' . $field;
                $values[$field] = $value;
            }
                
            $query .= ' WHERE ' . implode(' AND ', $whereConditions);

            $stmt = $pdo->prepare($query);
            $stmt->execute($values);

        }else{
            $stmt = $pdo->prepare($query);
            $stmt->execute();
        }
        

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    }
    

    function acceso($pdo,$ooad,$pssw){

        $query = 'SELECT a.* from aprobados a
        join login l on l.user = a.ooad
        where a.ooad = :ooad and l.password = :pssw';

    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':ooad', $ooad, PDO::PARAM_STR);
    $stmt->bindParam(':pssw', $pssw, PDO::PARAM_STR);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }

    ?>


