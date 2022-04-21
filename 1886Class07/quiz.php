<!-- 
Class 7 Assingment: Suman Chandra Sen, Id:1886 

Case Study:
    Question 01:
		Let’s make an exam question set (add at list 10 dummy question) like that
            $questionSet = [
                                [
                                    'question' => 'What is loream ipsum?',
                                    'options' => [
                                        'ans1', 'ans2', 'ans3', 'ans4'
                                    ]
                                ],
                                [
                                    'question' => 'What is loream ipsum?',
                                    'options' => [
                                        'ans1', 'ans2', 'ans3', 'ans4'
                                    ]
                                ],
                                [
                                    'question' => 'What is loream ipsum?',
                                    'options' => [
                                    'ans1', 'ans2', 'ans3', 'ans4'
                                    ]
                                ]
                            ];
    Make a simple exam design using html css
    Then make a exam by using these questions
    Your questions must be come randomize order
 -->




 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Exam About  Github</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<body>

<?php

$questions      =  [
    [
        'question' => 'Which command should you use to initialize a new git repository?',
        'options'  => [
        'git init', 'git bash', 'git install', 'git start'
        ]
    ],
    [
        'question' => 'Whats a shortcut to staging all the changes you have?',
        'options'  => [
        'git commit add .', 'git commit .', 'git add .', 'git stage -a'
        ]
    ],
    [
        'question' => 'Command to check the created, modified, deleted files in git bash before Commit?',
        'options'  => [
        'git show', 'git log', 'git status', 'all of the above'
        ]
    ],
    [
        'question' => 'Which the git command for commit with this "Initial commit" message?',
        'options'  => [
        'git commit -m "Initial commit"', 'git commit -msg "Initial commit"', 'git commit -M "Initial commit"', 'git commit "comment"'
        ]
    ],
    [
        'question' => 'Git commit -m < ? >, ? is for...',
        'options'  => [
            'comment', 'repo url', 'file name to be committed', 'None'
        ]
    ],
    [
        'question' => 'You can type “git status” at any time in a directory controlled by git to check the status of your files.',
        'options'  => [
            'True', 'False'
        ]
    ],
    [
        'question' => 'You are in desktop directory, You have a directory name \'MyGitProject\' on Desktop desktop directory. How can you enter into this directory?',
        'options'  => [
        'git cd MyGitProject', 'cd MyGitProject', 'git add MyGitProject', 'cd ..'
        ]
    ],
    [
        'question' => 'What is the meaning of this command \'git add . \'  ?',
        'options'  => [
        'stage individual file of your git project', 'stage All files of your current directory', 'stage all files of your whole project', 'None of these'
        ]
    ],
    [
        'question' => 'Git is a Version Control System...',
        'options'  => [
        'True', 'False'
        ]
    ],
    [
        'question' => 'Github is not a Software Development Hosting Platform for Collaboration.',
        'options'  => [
        'True', 'False'
        ]
    ],
];



?>    
<div class="container">
        <div class="card ">
                <div class="card-header text-center font-weight-bold">
                       <h2>Quiz Exam About  Github</h2>
                       
                </div>
                <div class="card-body">
                    <h5 class="card-title">Github Mastering Special Exam </h5>
                   <hr><br>
                   
                    <?php 

                            shuffle($questions);
                            foreach ($questions  as $key => $question) {
                                ?>
                                        <h5><?php echo 'Q'.++$key.') '. $question['question']?></h5>                          

                                        <?php            

                                        $optionsArray =  $question['options'];
                                        shuffle($optionsArray);
                                        foreach ($optionsArray as $optionsKey => $option) {
                                            
                                        

                                            ?>
                                        <div class="ml-5">
                                            <input type="radio" name="answer-<?php echo $key; ?>" id="answer-<?php echo $key.'-'.$optionsKey; ?>" value="<?php echo $option; ?>">&nbsp;&nbsp;<?php echo $option; ?>
                                        </div>       
                            <?php 
                                } 
                            }
                            ?>
                       
                    <button class="btn btn-primary">SUBMIT</button>
                </div>
                <div class="card-footer text-muted">
                   Copyright &copy; 2022
                </div>
        </div>
</div>

</body>
</html>

