<?php

final class PhabricatorExtensionsKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
  'Would run: 
 $ cd %s
$ %s
' => '다음을 실행했을 것입니다: 
 $ cd %s
$ %s',
  'Extension key: %s
Library: %s
Version: %s
URI: %s
' => '확장 기능 키: %s
라이브러리: %s
버전: %s
URI: %s',
  'Wrote configuration key "%s" to local storage (in file "%s").
' => '로컬 스토리지에 구성 키 "%s"를 (파일 %s에) 작성했습니다.',
  '1. Download the extension archive from %s to %s' => '1. %s에서 %s(으)로 확장 기능 아카이브를 다운로드합니다',
  '1. `git clone` the extension from url `%s` to location `%s`' => '1. URL `%s`의 확장 기능을 `%s` 위치로 `git clone`합니다.',
  'Can only install one extension at a time.' => '한번에 하나의 확장 기능만 설치할 수 있습니다.',
  'Install new extensions.' => '새로운 확장 기능을 설치합니다.',
  'Ignore these issues and continue with installation?' => '이 문제들을 무시하고 설치를 계속합니까?',
  'Would copy `%s` to `%s` and add `%s` to LoadLibraries
' => '\'%s\'을(를) \'%s\'(으)로 복사하고 `%s`을 LoadLibraries에 추가했을 것입니다',
  'Local path "%s" is not writable. This file must be writable so that "bin/config" can store configuration.
' => '로컬 경로 "%s"은(는) 쓰기가 불가능합니다. "bin/config"가 구성을 저장할 수 있으려면 이 파일의 쓰기가 가능해야 합니다.',
  'Extension %s not found.
' => '확장 기능 %s이(가) 없습니다.',
  'Downloading %s to %s
' => '%2$s에 %s을(를) 다운로드 중',
  'Allowed Extension Stores to use.' => '사용이 허용된 확장 기능 스토어입니다.',
  'Install extension by specifying its git URI.' => '확장 기능의 git URI를 지정함으로써 확장 기능을 설치합니다.',
  'Had issues verifying this download:' => '이 다운로드를 확인하는 중 문제가 존재:',
  'Unknown output format `%s`' => '알 수 없는 출력 형식 `%s`',
  'Store to search in and download from (Ignoring configuration).' => '검색 및 다운로드할 스토어입니다 (구성은 무시함).',
  'Would download and install \'%s\' as \'%s\'
' => '\'%s\'을(를) \'%s\'(으)로 다운로드하고 설치했을 것입니다',
  'Aborting.
' => '중단하는 중.',
  'Shows information about a prospective Extension.' => '예정된 확장 기능에 대한 정보를 표시합니다.',
  'Treating %s as an extension key
' => '%s을(를) 확장 기능 키로 취급',
  'After running, you should run `%s` and restart the server.' => '실행 후, `%s`을(를) 실행하고 서버를 다시 시작해야 합니다.',
  'Store to search in and query (Ignoring configuration).' => '검색 및 쿼리할 저장소입니다 (구성은 무시함).',
  'Managing and installing extensions' => '확장 기능 관리 및 설치',
  'Provide a uri or extension id to install' => '설치할 uri 또는 확장 기능 ID를 제시',
  'Unknown extension format `%s` - maybe upgrade %s first?
' => '알 수 없는 확장 기능 형식 `%s` - 먼저 %s를 업그레이드해야 할 수 있습니다.',
  'Unable to read the %s file of the downloaded package - can\'t decide what the name the library is using.' => '다운로드한 패키지의 %s 파일을 읽을 수 없습니다 - 라이브러리가 사용하는 이름을 결정할 수 없습니다.',
  '2. Add the extension to `load-libraries` in %s, so it will be loaded into %s' => '2. 확장 기능을 %s의 `load-libraries`에 추가하여 %s에 로드되도록 합니다',
  'PHP versions older then %s have known security vulnerabilities when considering PHAR files; Installing extensions from PHAR files and from the Store is therefore disabled. See %s' => '%s보다 오래된 PHP 버전은 PHAR 파일과 관련해 알려진 보안 취약점이 있으므로, PHAR 파일과 스토어에서 확장 기능을 설치하는 기능이 비활성화되었습니다. %s을(를) 참조하세요',
  'Continue installing whatever that is?' => '이것이 무엇이든 설치를 계속합니까?',
  'Manage %s Extensions' => '%s 확장 기능 관리',
  'Encountered an error trying to verify the downloaded package: %s' => '다운로드한 패키지를 확인하는 중 오류가 발생했습니다: %s',
  'Install a phar extension' => 'phar 확장 기능을 설치합니다',
  'Warning: We don\'t check what you\'re downloading. It can be anything. It has read/write access to anything %s has access to. be sure you trust it.' => '경고: 저희는 다운로드하는 내용을 검사하지 않습니다. 어떤 파일이든 다운로드할 수 있으며, %s이(가) 접근할 수 있는 모든 파일에 대한 읽기/쓰기 권한을 갖습니다. 신뢰할 수 있는지 확인하세요.',
  'The package is listed in the store as library `%s`, but the actual library downloaded is named `%s`. Depending on context, this may or may not be important.' => '해당 패키지는 스토어에 `%s` 라이브러리로 표시되지만, 실제로 다운로드되는 라이브러리의 이름은 `%s` 입니다. 이는 상황에 따라 중요할 수도 있고 아닐수도 있습니다.',
  'Aborting.' => '중단하는 중.',
  'Input `%s` looks like an extension key
' => '입력 `%s`은(는) 확장 기능 키처럼 보입니다',
  'Would add `%s` to key `%s` in file %s
' => '파일 %3$s의 키 `%2$s`에 `%s`을(를) 추가했을 것입니다',
  'Invalid filename \'%s\'
' => '유효하지 않은 파일 이름 \'%s\'',
  'Location to download and install extensions to.' => '확장 기능을 다운로드하고 설치할 위치입니다.',
  'Extension %s found in store %s.
' => '스토어 %2$s에서 확장 기능 %s을(를) 찾았습니다.',
  'Not an ext key? %s
' => '확장 기능 키가 아님? %s',
  'Lists installed extensions. Experimental.' => '설치된 확장 기능의 목록입니다. 실험 기능입니다.',
  'Extension with key %s not found in any store.
' => '어떤 스토어에서도 키가 %s인 확장 기능을 찾을 수 없습니다.',
  'Output format. `json` or `table`.' => '출력 형식입니다. `json` 또는 `table`입니다.',
  'This command will:' => '이 명령은 다음을 수행합니다:',
);
  }

}
