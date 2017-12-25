<?php
class Renews extends Database{
    
    public function getNews($from, $to) {
        
        return  $this->get_all_db("SELECT * FROM news WHERE status = '1' LIMIT $from, $to");

    }
    
    public function getNewsLink($news_id) {
        $res = $this->get_one_db("SELECT alias FROM url_alias WHERE url = 'news_id=$news_id'");
        if(isset($res['alias']) && $res['alias']){
            return $res['alias'];
        }
        else{
            return '#';
        }
    }
}



