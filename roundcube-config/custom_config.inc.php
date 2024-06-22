<?php

$config['db_dsnw'] = 'sqlite:////var/roundcube/db/sqlite.db';
$config['default_host'] = 'tls://mailserver';
$config['default_port'] = 993;
$config['smtp_server'] = 'tls://mailserver';
$config['smtp_port'] = 587;
$config['imap_conn_options'] = array(
  'ssl' => array(
    'verify_peer'  => false,
    'verify_peer_name' => false,
  ),
);
$config['smtp_conn_options'] = array(
  'ssl' => array(
    'verify_peer'  => false,
    'verify_peer_name' => false,
  ),
);

$config['des_key'] = 'rcmail-!24ByteDESkey*Str';

$config['plugins'] = array(
    'archive',
    'zipdownload',
);

$config['log_driver'] = 'syslog';

