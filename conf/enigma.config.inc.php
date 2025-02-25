<?php

// Enigma Plugin options
// --------------------

// A driver to use for PGP. Default: "gnupg".
$config['enigma_pgp_driver'] = 'gnupg';

// A driver to use for S/MIME. Default: "phpssl".
$config['enigma_smime_driver'] = 'phpssl';

// Enables logging of enigma operations (including Crypt_GPG debug info)
$config['enigma_debug'] = false;

// REQUIRED! Keys directory for all users.
// Must be writeable by PHP process, and not in the web server document root
$config['enigma_pgp_homedir'] = '/var/www/__APP__/plugins/enigma/home';

// Location of gpg binary. By default it will be auto-detected.
// This is also a way to force gpg2 use if there are both 1.x and 2.x on the system.
$config['enigma_pgp_binary'] = '';

// Location of gpg-agent binary. By default it will be auto-detected.
// It's used with GnuPG 2.x.
$config['enigma_pgp_agent'] = '';

// Location of gpgconf binary. By default it will be auto-detected.
// It's used with GnuPG >= 2.1.
$config['enigma_pgp_gpgconf'] = '';

// Name of the PGP symmetric cipher algorithm.
// Run gpg --version to see the list of supported algorithms
$config['enigma_pgp_cipher_algo'] = null;

// Name of the PGP digest (hash) algorithm.
// Run gpg --version to see the list of supported algorithms
$config['enigma_pgp_digest_algo'] = null;

// Enables multi-host environments support.
// Enable it if you have more than one HTTP server.
// Make sure all servers run the same GnuPG version and have time in sync.
// Keys will be stored in SQL database (make sure max_allowed_packet
// is big enough).
$config['enigma_multihost'] = false;

// Enables signatures verification feature.
$config['enigma_signatures'] = true;

// Enables messages decryption feature.
$config['enigma_decryption'] = true;

// Enables messages encryption and signing feature.
$config['enigma_encryption'] = true;

// Enable signing all messages by default
$config['enigma_sign_all'] = false;

// Enable encrypting all messages by default
$config['enigma_encrypt_all'] = false;

// Enable attaching a public key to all messages by default
$config['enigma_attach_pubkey'] = false;

// Default for how long to store private key passwords (in minutes).
// When set to 0 passwords will be stored for the whole session.
$config['enigma_password_time'] = 5;

// With this option you can lock composing options
// of the plugin forcing the user to use configured settings.
// The array accepts: 'sign', 'encrypt', 'pubkey'.
//
// For example, to force your users to sign every email,
// you should set:
//     - enigma_sign_all     = true
//     - enigma_options_lock = array('sign')
//     - dont_override       = array('enigma_sign_all')
$config['enigma_options_lock'] = array();
