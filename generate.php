#!/usr/bin/php
<?php
$findcmd = 'find ./projects/ -name *.json -not ' .
           '-name qqq.json -not -name raw.json';
$json_files = explode("\n", `$findcmd`);

foreach ($json_files as $filename) {
    $part = explode("/", $filename);
    $project = $part[2];
    $app = $part[3];
    $lang = $part[4];

    $lang = explode('.', $lang)[0];
    $lang_parts = explode('-', $lang);
    $lang = strtolower($lang_parts[0]);
    if (count($lang_parts) == 3) {
        $lang .= "_".strtoupper($lang_parts[1]);
        $lang .= "_".ucfirst($lang_parts[2]);
    } else if (count($lang_parts) == 2) {
        $lang .= "_".ucfirst($lang_parts[1]);
    }
    $classname = ucfirst($project).ucfirst($app).ucfirst($lang);
    $classname = str_replace('_', '', $classname);

    $cmd = ['./bin/translatewiki',
            'generate',
            '--source',
            $filename,
            '--class',
            $classname,
            '--locale',
            $lang,
            '--project',
            $project.'/'.$app,
            '--out',
            "./src/translations/$classname.php"
        ];
    $args = array();
    foreach($cmd as $arg) {
        $args[] = escapeshellarg($arg);
    }
    $cmd = join(" ", $args);
    $return_code = null;
    $output = array();
    echo "\nrun: $cmd\n\n";

    exec($cmd, $output, $return_code);

    foreach($output as $line) {
        echo $line."\n";
    }

    if ($return_code) {
        echo "ERROR: $return_code";
    }
}
