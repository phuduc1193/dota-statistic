<?php
  # Seed to create initial DB (work with mySQL)
  require_once('connection.php');
  
  # Users table
  mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `users` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT '',
  `client` int(5) DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT 0,
  `password` varchar(40) DEFAULT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT 0,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`username`),
  FOREIGN KEY (`client`) REFERENCES clients(`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
  
  # Clients table
  mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT '',
  `logo` varchar(40) DEFAULT NULL,
  `street` varchar(40) DEFAULT '',
  `city` varchar(20) DEFAULT '',
  `state` int(2) DEFAULT 43,
  `zip_code` int(5) DEFAULT NULL,
  `phone` varchar(20) DEFAULT '',
  `email` varchar(254) DEFAULT '',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
  # States table
  mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `states` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `us_ansi` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`), UNIQUE KEY (`us_ansi`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");
  # Initial States
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Alabama', 'AL');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Alaska', 'AK');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Arizona', 'AZ');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Arkansas', 'AR');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('California', 'CA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Colorado', 'CO');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Connecticut', 'CT');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Delaware', 'DE');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Florida', 'FL');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Georgia', 'GA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Hawaii', 'HI');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Idaho', 'ID');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Illinois', 'IL');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Indiana', 'IN');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Iowa', 'IA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Kansas', 'KS');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Kentucky', 'KY');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Louisiana', 'LA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Maine', 'ME');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Maryland', 'MD');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Massachusetts', 'MA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Michigan', 'MI');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Minnesota', 'MN');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Mississippi', 'MS');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Missouri', 'MO');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Montana', 'MT');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Nebraska', 'NE');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Nevada', 'NV');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('New Hampshire', 'NH');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('New Jersey', 'NJ');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('New Mexico', 'NM');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('New York', 'NY');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('North Carolina', 'NC');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('North Dakota', 'ND');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Ohio', 'OH');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Oklahoma', 'OK');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Oregon', 'OR');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Pennsylvania', 'PA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Rhode Island', 'RI');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('South Carolina', 'SC');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('South Dakota', 'SD');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Tennessee', 'TN');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Texas', 'TX');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Utah', 'UT');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Vermont', 'VT');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Virginia', 'VA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Washington', 'WA');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('West Virginia', 'WV');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Wisconsin', 'WI');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Wyoming', 'WY');");
  mysqli_query($connection, "INSERT INTO states (name, us_ansi) VALUES ('Not Applicable', 'NA');");
  
  # Services table
  mysqli_query($connection, "CREATE TABLE IF NOT EXISTS `services` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT '',
  `created_at` TIMESTAMP NOT NULL DEFAULT 0,
  `updated_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;");

?>