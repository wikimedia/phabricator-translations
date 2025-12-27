#!/usr/bin/php
<?php
// Remove any old translations, in case any JSON files in projects/ were deleted by translatewiki
// to prevent the corresponding PHP files in src/translations from becoming orphan
shell_exec('rm src/translations/*.php');
$findcmd = 'find ./projects/ -name *.json -not ' .
           '-name qqq.json -not -name en-x-raw.json -not -name en.json';
$json_files = explode("\n", trim(shell_exec($findcmd)));

$override_lang = array(
    'ko' => 'ko_KR',
    'de' => 'de_DE',
    'fr' => 'fr_FR',
    'es' => 'es_ES',
    'cs' => 'cs_CZ',
    'pt' => 'pt_PT'
);

foreach ($json_files as $filename) {
    if (!file_exists($filename)) {
        echo("File does not exist: $filename\n");
        continue;
    }
    $part = explode("/", $filename);
    $project = $part[2];
    $app = $part[3];
    $lang = $part[4];

    $lang = explode('.', $lang)[0];
    if (isset($override_lang[$lang])) {
        $lang = $override_lang[$lang];
    } else {
        $lang_parts = explode('-', $lang);
        $lang = strtolower($lang_parts[0]);
        if (count($lang_parts) == 3) {
            $lang .= "_".strtoupper($lang_parts[1]);
            $lang .= "_".ucfirst($lang_parts[2]);
        } else if (count($lang_parts) == 2) {
            if (strlen($lang_parts[1]) == 2) {
                $lang .= "_".strtoupper($lang_parts[1]);
            } else {
                $lang .= "_".ucfirst($lang_parts[1]);
            }
        }
    }
    $classname = ucfirst($project).ucfirst($app).ucfirst($lang);
    $classname = str_replace('_', '', $classname);

    $cmd = ['./bin/translatewiki',
            'generate',
            '--source',
            $filename,
            '--class',
            $classname,
            '--classlocale',
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
# Rebuild library map
shell_exec('../arcanist/bin/arc liberate');
