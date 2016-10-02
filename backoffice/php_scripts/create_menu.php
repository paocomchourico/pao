<?php
    $m_id = $POST['m_id'];
    $m_title = $POST['m_title'];	
    $m_slash = $POST['m_slash'];	
    $m_infotitle = $POST['m_infotitle'];	
    $m_info = $POST['m_info'];	            
    $m_active = $POST['m_active'];	
    $sql = "insert into menus (m_id, m_title,m_slash,m_infotitle,m_info,m_active)
                                values ($m_id,$m_title,$m_slash,$m_infotitle,$m_info,$m_active";
    echo "**********".$sql."************";
//mysql_query("START TRANSACTION");
  //  $result = mysql_query ($sql);
//if(!$result){
  //   mysql_query("ROLLBACK");
    //echo "transaction rolled back";
    //exit;
//}else{
  //   mysql_query("COMMIT");
    //echo "Database transaction was successful";
//}
    //alterei cenas a montes 

?> 