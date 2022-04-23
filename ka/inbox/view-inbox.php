<?php

namespace KA\Inbox;

function view_inbox() {
  return [
    'messages' => [
      [
        'id' => 'id-goes-here',
        'subject' => 'Vaxaslim',
        'date' => '01 31 2010 13:09:05 +0600',
        'from' => 'Dr. Stephen T. Colbert DFA',
        'from_id' => 'id-goes-here',
        'to' => 'Jon Stewart',
        'to_id' => 'id-goes-here',
        'has_read' => 1,
        'has_replied' => 0,
        'body_preview' => 'Just a reminder that Vaxaslim',
        'tags' => 'Correspondence'
      ]
    ],
    'message_count' => 4,
    'status' => \KA\Empire\get_status(),
  ];
}
