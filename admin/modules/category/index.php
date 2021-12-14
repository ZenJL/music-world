<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Categories</h3>
    </div>
    <div class="card-body p-0">
        <table class="table">
            <thead>
                <tr>
                    <th>Category Name</th>
                    <th style="width: 40px;">Delete</th>
                    <th style="width: 40px;">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $data = get_all_category($conn);

                    recursiveTable($data);
                ?>

            </tbody>
        </table>
    </div>
</div>