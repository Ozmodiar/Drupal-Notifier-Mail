<?php

namespace Drupal\notifier_mail\Channel;

use Notifier\Mail\MailChannel as NotifierMailChannel;

class MailChannel extends NotifierMailChannel {

  /**
   * Return the human-readable name of the channel.
   */
  public function getHumanReadableName() {
    return 'E-mail';
  }
}
