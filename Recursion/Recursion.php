<?php
$sol = new Solution;
echo json_encode($sol->floodFill([[1,1,1],[1,1,0],[1,0,1]], 1, 1, 2));
class Solution {
    private $step = 0;
    private $parentId = 0;
    /**
     * @param Integer[][] $image
     * @param Integer $sr
     * @param Integer $sc
     * @param Integer $color
     * @return Integer[][]
     */
    function floodFill($image, $sr, $sc, $newColor) {  
        $this->image = $image;
        $this->changeColor($sr,$sc,$image[$sr][$sc],$newColor, 1);
        return $this->image;
    }
    function changeColor($sr, $sc, $color, $newColor, $parentId){
        $this->parentId = $parentId;
        $this->log("Received SR $sr and SC $sc");
        if(!isset($this->image[$sr][$sc])){
            $this->log("Does not exist, skipping $sr|$sc");
            return null;
        }
        if(isset($this->viewed[$sr][$sc])){
            $this->log("Already processed, skipping $sr|$sc");
            return null;
        }
        if($this->image[$sr][$sc] !== $color){
            $this->log("Color {$this->image[$sr][$sc]} does not match color to be changed $color, skipping $sr|$sc");
            return null;
        }
        $this->image[$sr][$sc] = $newColor;
        $this->viewed[$sr][$sc] = 1;
        $this->log(json_encode($this->image) . " -> Cell $sr|$sc set to color $newColor");
        $sr = $sr-1; $sc = $sc;
        $this->log(json_encode($this->image) . " -> Changed 1 => Sending SR $sr and SC $sc to function on line " . __LINE__ + 1);
        $this->changeColor($sr, $sc, $color, $newColor, 2);
        $sr = $sr+1; $sc = $sc;
        $this->log(json_encode($this->image) . " -> Changed 2 => Sending SR $sr and SC $sc to function on line " . __LINE__ + 1);
        $this->changeColor($sr, $sc, $color, $newColor, 3);
        $sr = $sr; $sc = $sc - 1;
        $this->log(json_encode($this->image) . " -> Changed 3 => Sending SR $sr and SC $sc to function on line " . __LINE__ + 1);
        $this->changeColor($sr, $sc, $color, $newColor, 4);
        $sr = $sr; $sc = $sc + 1;
        $this->log(json_encode($this->image) . " -> Changed 4 => Sending SR $sr and SC $sc to function on line " . __LINE__ + 1);
        $this->changeColor($sr, $sc, $color, $newColor, 5);
        //$this->log(json_encode($this->image) . " -> Cell changed 5 => $sr|$sc");
    }
    private function log($message)
    {
        $this->step++;
        echo "STEP {$this->step} (PARENT {$this->parentId}): $message \n";
    }
}

?>