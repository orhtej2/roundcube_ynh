#!/bin/bash

#=================================================
# COMMON VARIABLES
#=================================================

YNH_PHP_VERSION="7.4"

# Package dependencies
pkg_dependencies="php-pear php${YNH_PHP_VERSION}-ldap php${YNH_PHP_VERSION}-mysql php${YNH_PHP_VERSION}-json php${YNH_PHP_VERSION}-cli php${YNH_PHP_VERSION}-intl php${YNH_PHP_VERSION}-zip php${YNH_PHP_VERSION}-gd php${YNH_PHP_VERSION}-mbstring php${YNH_PHP_VERSION}-dom php${YNH_PHP_VERSION}-curl"

# Composer version
YNH_COMPOSER_VERSION=2.3.7

# Plugins version
contextmenu_version=3.3.1
automatic_addressbook_version=v0.4.3
carddav_version=5.0.1

#=================================================
# EXPERIMENTAL HELPERS
#=================================================
