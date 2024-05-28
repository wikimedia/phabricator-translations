if [ -d "../arcanist/src/" ]; then
  ./bin/translatewiki export ../arcanist/src/ --as arcanist --browse-uri https://phabricator.wikimedia.org/source/arcanist/browse/wmf%252Fstable/src/
else
  echo "FATAL ERROR: Unable to load 'Arcanist' library."
fi

if [ -d "../phabricator/src/" ]; then
  ./bin/translatewiki export ../phabricator/src/ --as phabricator --browse-uri https://phabricator.wikimedia.org/source/phabricator/browse/wmf%252Fstable/src/
elif [ -d "../phorge/src/" ]; then
  ./bin/translatewiki export ../phorge/src/ --as phorge --browse-uri https://phabricator.wikimedia.org/source/phabricator/browse/wmf%252Fstable/src/
else
  echo "FATAL ERROR: Unable to load 'Phorge' or 'Phabricator' library."
fi

if [ -d "../libext/misc/" ]; then
  ./bin/translatewiki export ../libext/misc/ --as phabricator_ext --browse-uri https://phabricator.wikimedia.org/source/phab-extensions/browse/wmf%252Fstable/
else
  echo "WARNING: Unable to load WMF 'libext/misc' library; skipping."
fi

if [ -d "../libext/ava" ]; then
  ./bin/translatewiki export ../libext/ava/src --as phabricator_ava --browse-uri https://phabricator.wikimedia.org/source/phabricator-ava/browse/wmf%252Fstable/src/
else
  echo "WARNING: Unable to load WMF 'libext/ava' library; skipping."
fi

./bin/translatewiki export ./src --as translatewiki --browse-uri https://phabricator.wikimedia.org/source/phabricator-translations/browse/wmf%252Fstable/src
