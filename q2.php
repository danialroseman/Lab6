<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>
    <?php
    $students = [
        [
            'name' => 'Alice',
            'program' => 'BIP',
            'Age' => '21'
        ],
        [
            'name' => 'Bob',
            'program' => 'BIS',
            'Age' => '20'
        ],
        [
            'name' => 'Rajju',
            'program' => 'BIT',
            'Age' => '22'
        ]
    ];
    ?>
    
    <table border="1">
        <thead>
            <tr>
                <th>Name</th>
                <th>Program</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?php echo $student['name']; ?></td>
                    <td><?php echo $student['program']; ?></td>
                    <td><?php echo $student['Age']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
