<!DOCTYPE html>
<h1><?= lang('agenda_title') ?></h1>
<table class="table table-responsive table-striped">
    <thead>
    <tr>
        <th><?= lang('agenda_name') ?></th>
        <th><?= lang('agenda_date') ?></th>
        <th><?= lang('agenda_nr_registrations') ?></th>
        <th><?= lang('agenda_type') ?></th>
    </tr>
    </thead>
    <tbody>
        <?php foreach ($events as $event) { ?>
        <tr class="clickable-row" data-href="/agenda/id/<?= $event->event_id ?>">
            <td style="padding-left: 10px;"><?= $event->naam ?></td>
            <td><?= date_format(date_create($event->van), 'd-m-Y') ?></td>
            <td><?= $event->aanmeldingen ?></td>
            <td><?= ($event->soort ==='nszk')? strtoupper($event->soort) :ucwords($event->soort) ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>