<?php
Class Chinchiro {
    private $rand = [];
    private $sum;  
    private $rank;
    private $deme;

    //ランクを返す
    public function getRank(){
        return $this->rank;
    }

    //出目を返す
    public function getDeme() {
        return $this->deme;
    }

    //出目と合計値を初期化
    public function __construct(){
        $this->rand = $this->rollDice();
        $this->sum = $this->sumDice();
    }

    //3回ダイスを振った結果を返す
    public function rollDice() {
        $this->rand = [];
        for($i=1 ;$i<=3 ;$i++){
            $this->rand[] = rand(1,6);
        }
        return $this->rand;
    }

    //ダイスの合計値を返す
    public function sumDice() {
        $this->rand;
        $sum = array_sum($this->rand);
        return $sum;
    }

    //3回振ったダイスの結果を表示する
    public function getDice() {
        $this->rand;
        echo '<img alt="dice" src="../assets/dice',$this->rand[0],'.png" width="100" height="100">',
             '<img alt="dice" src="../assets/dice',$this->rand[1],'.png" width="100" height="100">',
             '<img alt="dice" src="../assets/dice',$this->rand[2],'.png" width="100" height="100">';   
        }

    //役を決定する
    public function setRank(){
        $dice = $this->rand;
        sort($dice);
    //チンチロの役処理
        if ($dice === [1, 1, 1]) {
            echo 'ピンゾロ';
            $this->rank = 1;
        } elseif ($dice[0] === $dice[1] && $dice[1] === $dice[2]) {
            echo 'ゾロ目';
            $this->rank = 2;
        } elseif ($dice === [4, 5, 6]) {
            echo 'シゴロ';
            $this->rank = 3;
        } elseif ($dice[0] === $dice[1]) {
            echo $dice[2], 'の目';
            $this->rank = 4;
            $this->deme = $dice[2];
        } elseif ($dice[1] === $dice[2]) {
            echo $dice[0], 'の目';
            $this->rank = 4;
            $this->deme = $dice[0];
        } elseif ($dice === [1, 2, 3]) {
            echo 'ヒフミ';
            $this->rank = 6;
        } else {
            echo '役なし';
            $this->rank = 5;
        }
    }
}