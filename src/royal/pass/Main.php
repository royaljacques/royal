<?php
namespace royal\pass;

class Main extends PluginBase implements Listener{
    public function onEnable(){
        $this->getServer()->getLogger()->info("le plugin s'ouvre");
    }
}