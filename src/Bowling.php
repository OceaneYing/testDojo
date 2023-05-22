<?php

namespace App;

class Bowling
{
  public function bowling($strScores)
  {
    $result = 0;
    $frames = explode(' ', $strScores);

    foreach ($frames as $frame) {
      // spare : 10 + 1 next turn
      if (strpos($frame, '/') > -1) {
        $next = self::getNextScore(next($frames));
        $result += 10 + $next;
      // strike : 10 + 2 next turns
      } elseif (strpos($frame, 'X') > -1) {
        $next = self::getNext2Scores(next($frames), next($frames));
        $result += 10 + $next;
      // normal situation
      } else {
        $result += array_sum(str_split($frame));
      }
    }

    return $result;
  }

  public static function getNextScore($nextFrame) {
    switch ($nextFrame) {
      case 'X':
        return 10;
      default:
        return intval($nextFrame[0]);
    }
  }

  public static function getNext2Scores($frame, $frame2) {
    return 0;
  }
}