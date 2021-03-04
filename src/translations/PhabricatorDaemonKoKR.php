<?php

final class PhabricatorDaemonKoKR
  extends PhutilTranslation {

  public function getLocaleCode() {
    return 'ko_KR';
  }

  protected function getTranslations() {
    return array(
      'Clock' => '시계',
      'Leased' => '대여됨',
      'Starting daemons as %s' => '%s 으로 데몬 시작 중',
      'Retries' => '재시도',
      'Shutting Down' => '종료 중',
      'This daemon has not reported a status update recently (within %s). It may have exited abruptly. After %s, it will be presumed dead.' => '이 데몬은 최근 (%s 동안) 상태 업데이트를 보고하지 않았습니다. 갑자기 종료되었을 수 있습니다. %s 후에 죽은 것으로 간주됩니다.',
      'This daemon has been lost or exited uncleanly, and is presumed dead.' => '이 데몬은 사라졌거나 깨끗하게 종료되지 않았으며, 죽은 것으로 간주됩니다.',
      'Terminating process %d...' => '프로세스 %s 종료 중...',
      'Archived Tasks' => '보존된 작업',
      'No tasks have completed in the last 15 minutes.' => '최근 15분 동안 완료된 작업이 없습니다.',
      'Queued Tasks' => '큐에 있는 작업',
      'This daemon is shutting down.' => '이 데몬은 종료 중입니다.',
      'Leased Tasks' => '대여된 작업',
      'Unable to stop all daemon processes. You may need to run this command as root with "sudo".' => '모든 데몬 프로세스를 중지할 수 없습니다. "sudo"를 사용하여 루트 권한으로 이 명령을 실행해야 할 수 있습니다.',
      'All Daemons' => '모든 데몬',
      'STOP' => '중지',
      'Not Leased' => '대여되지 않음',
      'Task Does Not Exist' => '작업이 존재하지 않습니다',
      'There are no running daemons.' => '실행 중인 데몬이 없습니다.',
      'Stopped PID %d ("%s")' => '중지된 PID %s ("%s")',
      'Exited' => '종료됨',
      'Waiting For Confirmation' => '확인 대기 중',
      'RELOAD' => '다시 로드',
      'Deprecated. Has no effect.' => '구식입니다. 영향을 주지 않습니다.',
      'Lease Status' => '대여 상태',
      'There are no running daemon processes.' => '실행 중인 데몬 프로세스가 없습니다.',
      'Lease Expired' => '대여 만료됨',
      'Freeing active task leases...' => '작업 중인 작업 대여 해제하기',
      'Start work on this bulk job?' => '이 대량 작업을 시작할까요?',
      'View Full Logs' => '전체 기록 보기',
      'Lease Owner' => '대여 주인',
      'This job is running.' => '이 작업은 진행 중입니다.',
      'PPID' => 'PPID',
      '%s s' => '%s s',
      'RUNNING DAEMONS' => '실행 중인 데몬',
      'Process %d exited.' => '프로세스 %s 종료됨.',
      'Unable to stop PID %d ("%s").' => 'PID %s ("%s")를 중지할 수 없습니다.',
      'Daemons are already running:' => '데몬이 이미 실행 중입니다:',
      'NO DAEMONS' => '데몬 없음',
      'Bulk Jobs' => '대량 작업',
      'Confirm Bulk Job' => '대량 작업 확인',
      'There are no running daemon processes to reload.' => '다시 불러올 동작 중인 데몬 프로세스가 없습니다.',
      'Task queue is empty.' => '작업 큐가 비어 있습니다.',
    );
  }

}
