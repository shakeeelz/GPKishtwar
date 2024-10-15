<?php
// Simulated eventArray (replace this with your actual event fetching logic)
$eventArray = [
  ['eventId' => 1, 'eventName' => 'Tech Conference 2024', 'eventDescription' => 'A global conference on the latest in tech innovation.', 'eventData' => '15th October 2024'],
  ['eventId' => 2, 'eventName' => 'Startup Pitch Fest', 'eventDescription' => 'Showcase your startup ideas and win funding.', 'eventData' => '22nd October 2024'],
  ['eventId' => 3, 'eventName' => 'AI Workshop', 'eventDescription' => 'Hands-on AI workshop for beginners and professionals.', 'eventData' => '30th October 2024'],
  ['eventId' => 4, 'eventName' => 'Hackathon 2024', 'eventDescription' => 'Collaborate and code in a 48-hour hackathon.', 'eventData' => '5th November 2024'],
  ['eventId' => 5, 'eventName' => 'Past Event 1', 'eventDescription' => 'Description for past event 1.', 'eventData' => '10th October 2024'],
  ['eventId' => 6, 'eventName' => 'Past Event 2', 'eventDescription' => 'Description for past event 2.', 'eventData' => '8th October 2024'],
  ['eventId' => 7, 'eventName' => 'Past Event 3', 'eventDescription' => 'Description for past event 3.', 'eventData' => '1st October 2024'],
];

$iconArray = ['fa-calendar', 'fa-bullhorn', 'fa-users', 'fa-rocket', 'fa-microphone'];

// Convert event dates to timestamps and sort events
foreach ($eventArray as &$event) {
    $event['eventTimestamp'] = strtotime($event['eventData']);
}
usort($eventArray, fn($a, $b) => $b['eventTimestamp'] <=> $a['eventTimestamp']); // Sort by date descending

$currentDate = time(); // Current timestamp

?>

<section id="newsevents">
    <header class="major">
        <h2>News & Events</h2>
    </header>

    <div class="event-marquee-container">
        <marquee class="event-marquee" behavior="scroll" direction="left">
            <?php foreach ($eventArray as $event): ?>
                <span><strong><?php echo $event['eventName']; ?></strong> - <?php echo $event['eventData']; ?> | </span>
            <?php endforeach; ?>
        </marquee>
    </div>

    <div class="features">
        <?php
        $iconIndex = 0; // Initialize the icon index
        $conductedCount = 0; // To count conducted events for the "New" label

        foreach ($eventArray as $event):
            // Rotate through the icon array by resetting the index after the last icon
            $iconClass = $iconArray[$iconIndex % count($iconArray)];

            // Check if the event is upcoming or conducted
            if ($event['eventTimestamp'] > $currentDate) {
                $label = '<span class="new-icon blink">Upcoming</span>'; // Upcoming events
            } else {
                // Mark latest conducted events as "New"
                if ($conductedCount < 3) {
                    $label = '<span class="new-icon blink">New</span>';
                    $conductedCount++;
                } else {
                    $label = ''; // No label for older conducted events
                }
            }
        ?>
            <article class="event-article">
                <span class="icon solid <?php echo $iconClass; ?>"></span>
                <?php echo $label; ?>
                <div class="content">
                    <h3><?php echo $event['eventName']." : ";?> 
                    <?php echo $event['eventData']; ?>
                  </h3>
                    <p><?php echo $event['eventDescription']; ?></p>
                 
                </div>
            </article>
        <?php
            $iconIndex++; // Move to the next icon for the next event
        endforeach;
        ?>
    </div>
</section>

<!-- CSS Styles -->
<style>
    .notification-list ul {
        list-style-type: none; /* Removes bullet points from the list */
        padding: 0;
        margin: 0;
    }

    .notification-list li {
        padding: 15px;
        border-bottom: 1px solid #ddd; /* Adds a divider between notifications */
        margin-bottom: 10px;
    }

    .notification-list li:last-child {
        border-bottom: none; /* Removes the last item's bottom border */
    }

    .notification-date {
        color: #888;
        font-size: 0.9em;
    }

    .upcoming-icon {
        color: green;
        font-weight: bold;
        margin-left: 10px;
        font-size: 0.9em;
    }

    .new-icon {
        color: red;
        font-weight: bold;
        margin-left: 10px;
        font-size: 0.9em;
    }

    /* Blinking effect */
    @keyframes blink {
        0% { opacity: 1; }
        50% { opacity: 0; }
        100% { opacity: 1; }
    }

    .blink {
        animation: blink 1s infinite; /* Blink animation every 1 second */
    }

    /* Optional hover effect */
    .notification-list li:hover {
        background-color: #f9f9f9;
    }
</style>
