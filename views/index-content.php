<?php if (!empty($cities)): ?>
    <?php echo $pagination; ?>
    <table class="table table-hover">
        <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Name city</th>
            <th scope="col">Population</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($cities as $city) : ?>
            <tr id="city-<?php echo $city['id'] ?>">
                <th scope="row"><?php echo $city['id'] ?></th>
                <td><?php echo $city['name'] ?></td>
                <td><?php echo $city['population'] ?></td>
                <td>
                    <button class="btn btn-info btn-edit" data-id="<?php echo $city['id'] ?>"
                            data-bs-toggle="modal" data-bs-target="#editCity">
                        Edit
                    </button>
                    <button class="btn btn-danger btn-edit">Delete</button>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>Cities not found...</p>
<?php endif; ?>