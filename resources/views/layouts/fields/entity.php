<ul class="list-unstyled example">
    <?php foreach ((array)$options['children'] as $child): ?>
        <li class="mb-15">
            <?= $child->render($options['choice_options'], true, true, false) ?>
        </li>
    <?php endforeach; ?>
</ul>