<?php

class Bird {

  public $id;
  public $common_name;
  public $habitat;
  public $food;
  public $conservation_id;
  public $backyard_tips;

  protected const CONSERVATION_LEVELS = [
    1 => 'Low concern',
    2 => 'Moderate Concern',
    3 => 'High Concern',
    4 => 'Extreme Concern'
  ];

  public function __construct($args=[]) {
    //$this->brand = isset($args['brand']) ? $args['brand'] : '';
    $this->common_name = $args['common_name'] ?? '';
    $this->habitat = $args['habitat'] ?? '';
    $this->food = $args['food'] ?? '';
    $this->nest = $args['nest'] ?? '';
    $this->behavior = $args['behavior'] ?? 0.0;
    $this->conservation_id = $args['conservation_id'] ?? 3;
    $this->backyard_tips = $args['backyard_tips'] ?? '';

    // Caution: allows private/protected properties to be set
    // foreach($args as $k => $v) {
    //   if(property_exists($this, $k)) {
    //     $this->$k = $v;
    //   }
    // }
  }


  public function conservation_level() {
    if($this->conservation_id > 0) {
      return self::CONSERVATION_LEVELS[$this->conservation_id];
    } else {
      return "Unknown";
    }
  }

}

?>
