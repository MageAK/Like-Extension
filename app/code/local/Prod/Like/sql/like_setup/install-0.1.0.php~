<?php
$installer = $this;
$installer->startSetup();
$installer->run("
-- DROP TABLE IF EXISTS {$this->getTable('like')};
CREATE TABLE {$this->getTable('like')} (
  `id` int(11) unsigned NOT NULL auto_increment,
  `productid` int(11) NOT NULL default '',
  `like_count` int(11) NOT NULL default '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
    ");
$installer->endSetup();
