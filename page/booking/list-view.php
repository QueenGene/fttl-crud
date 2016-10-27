<h1>
    Bookings
</h1>

<?php if (empty($booking)): ?>
    <p>No Bookings found.</p>
<?php else: ?>
    <ul class="list">
        <?php foreach ($booking as $booking): ?>
        <li>
            <h3><a href="<?php echo Utils::createLink('detail', array('id' => $booking->getId())) ?>"><?php echo Utils::escape($booking->getFlightName()); ?></a></h3>
            <p><span class="label">Created On:</span> <?php echo Utils::escape(Utils::formatDateTime($booking->getFlightDate())); ?></p>
        </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

