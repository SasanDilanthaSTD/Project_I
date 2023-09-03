<?php

class stress_level
{
    public function get_questions_pss($con)
    {
        //create arry
        $set_indexing = array();
        // set quary
        $sql_1 = "SELECT stress_tool.q_id, stress_tool.questions FROM stress_tool WHERE stress_tool.method = 'PSS' ORDER BY RAND()";
        $resutl = $con->prepare($sql_1);
        // execute
        if ($resutl->execute()) {
            while ($result_set = $resutl->fetch(PDO::FETCH_OBJ)) {
                $set_indexing[] = array(
                    "q_id" => $result_set->q_id,
                    "q" => $result_set->questions
                );
            }
            return $set_indexing;
        }
    }
}