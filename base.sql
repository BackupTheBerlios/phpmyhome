# phpMyAdmin SQL Dump
# version 2.5.5-pl1
# http://www.phpmyadmin.net
#
# Serveur: localhost
# Généré le : Mardi 30 Mars 2004 à 10:49
# Version du serveur: 4.0.14
# Version de PHP: 4.3.3
# 
# Base de données: `phpmyhome`
# 
# --------------------------------------------------------

#
# Structure de la table `notes`
#

CREATE TABLE `notes` (
  `user_id` int(10) NOT NULL default '0',
  `note` text NOT NULL
) TYPE=MyISAM;



# --------------------------------------------------------

#
# Structure de la table `users`
#

CREATE TABLE `users` (
  `user_id` int(10) NOT NULL auto_increment,
  `login` varchar(15) NOT NULL default '',
  `passwd` varchar(40) NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `login` (`login`)
) TYPE=MyISAM AUTO_INCREMENT=2 ;
