<?php
// Simulated notificationsArray (replace this with your actual notification fetching logic)
$notificationsArray = [
  ['notificationId' => 1, 'notificationTitle' => 'New Course Available: Data Science', 'notificationDescription' => 'Enroll now for the latest Data Science course.', 'notificationDate' => '14th October 2024'],
  ['notificationId' => 2, 'notificationTitle' => 'Holiday Notice', 'notificationDescription' => 'The institute will be closed on 18th October for Diwali celebrations.', 'notificationDate' => '12th October 2024'],
  ['notificationId' => 3, 'notificationTitle' => 'Exam Schedule Released', 'notificationDescription' => 'The exam schedule for the upcoming semester has been published.', 'notificationDate' => '10th October 2024'],
  ['notificationId' => 4, 'notificationTitle' => 'Workshop on AI', 'notificationDescription' => 'Register for the hands-on workshop on Artificial Intelligence.', 'notificationDate' => '8th October 2024'],
];
?>

<section id="notifications">
    <header class="major">
        <h2>Latest Notifications</h2>
    </header>

    <!-- Notifications as a list -->
    <div class="notification-list">
        <ul>
            <?php 
            $count = 0; // Counter to limit to top 3 notifications
            foreach ($notificationsArray as $notification): 
                $count++;
            ?>
            <li>
                <strong><?php echo $notification['notificationTitle']; ?></strong>
                <?php if ($count <= 3): ?>
                    <span class="new-icon blink">New</span> <!-- Blinking New icon for top 3 -->
                <?php endif; ?>
                <br>
                <span class="notification-date"><?php echo $notification['notificationDate']; ?></span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>


