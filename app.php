<?php

class Config
{
  static function start()
  {
    $configs = glob('components/data/*.php');

    foreach ($configs as $config)
      require $config;
  }

  static function load($config)
  {
    $path = "components/data/$config.php";
    if (file_exists($path))
      return require $path;
  }
}
