<?php

trait LoggerTrait {
  public function log($className, $message): void
  {
    echo '[LOG] '. $className .' : '. $message ."\n";
  }
}