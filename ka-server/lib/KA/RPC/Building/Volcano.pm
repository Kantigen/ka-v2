package KA::RPC::Building::Volcano;

use Moose;
use utf8;
no warnings qw(uninitialized);
extends 'KA::RPC::Building';

sub app_url {
    return '/volcano';
}

sub model_class {
    return 'KA::DB::Result::Building::Permanent::Volcano';
}

no Moose;
__PACKAGE__->meta->make_immutable;

