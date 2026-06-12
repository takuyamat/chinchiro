<?php
class Judge {
    //役判定用
    public function getJudge($player,$dealer){
        $playerSum = $player->sumDice();
        $playerRank = $player->getRank();
        $playerDeme = $player->getDeme();
        $dealerSum = $dealer->sumDice();
        $dealerRank = $dealer->getRank();
        $dealerDeme = $dealer->getDeme();
        echo '<br>';
        if($playerRank < $dealerRank){
            echo 'あなたの勝ち';    
        }elseif($playerRank > $dealerRank){
            echo 'あなたの負け';
        }elseif($playerRank ==4 && $dealerRank == 4){
            if($playerDeme > $dealerDeme){
                echo 'あなたの勝ち';
            }elseif($playerDeme < $dealerDeme){
                echo 'あなたの負け';
            }else{
                if($playerSum > $dealerSum){
                echo 'あなたの勝ち';
                }elseif($playerSum < $dealerSum){
                echo 'あなたの負け';
                }else{
                echo '引き分け';
                }
            }    
        }else{
            if($playerSum > $dealerSum){
            echo 'あなたの勝ち';
            }elseif($playerSum < $dealerSum){
            echo 'あなたの負け';
            }else{
            echo '引き分け';
            }
        }
    } 
}
?>