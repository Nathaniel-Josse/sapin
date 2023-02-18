<?php

class Sapin {
    public function sapin(){
        echo "<p>";
        echo "<span class='orange'>*</span> <br>";
        for ($i=1; $i < 22; $i++) { 
            echo "<span class='orange'>*</span>";
            for ($j=1; $j <= $i*2; $j++) { 
                echo "<span class='vert'>*</span>";
            }
            echo "<span class='orange'>*</span> <br>";
        }
        for ($i=1; $i < 7; $i++) { 
            for ($j=1; $j < 11; $j++) { 
                echo "<span class='rouge'>*</span>";
            }
            echo "<br>";
        }
        echo "</p>";
    }
}