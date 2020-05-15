<?php
    $topSkills = [
        [
            'name'      =>  'PHP',
            'level'     =>  'Expert',
            'years'     =>  5,
            'percent'   =>  90,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'Node.js',
            'level'     =>  'Advanced',
            'years'     =>  2,
            'percent'   =>  80,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'MySQL',
            'level'     =>  'Advanced',
            'years'     =>  5,
            'percent'   =>  80,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'MongoDB',
            'level'     =>  'Advanced',
            'years'     =>  2,
            'percent'   =>  80,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'SQLite 3',
            'level'     =>  'Advanced',
            'years'     =>  3,
            'percent'   =>  75,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'HTML & CSS',
            'level'     =>  'Expert',
            'years'     =>  6,
            'percent'   =>  90,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'JavaScript',
            'level'     =>  'Advanced',
            'years'     =>  5,
            'percent'   =>  85,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'React',
            'level'     =>  'Advanced',
            'years'     =>  2,
            'percent'   =>  75,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'Vue',
            'level'     =>  'Advanced',
            'years'     =>  3,
            'percent'   =>  80,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'Bootstrap 3/4',
            'level'     =>  'Expert',
            'years'     =>  5,
            'percent'   =>  90,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'jQuery',
            'level'     =>  'Expert',
            'years'     =>  5,
            'percent'   =>  90,
            'desc'      =>  ''
        ],
        [
            'name'      =>  'DevOps',
            'level'     =>  'Intermediate',
            'years'     =>  2,
            'percent'   =>  60,
            'desc'      =>  ''
        ]
    ];

    $otherSkills = [
        'PHP Slim 2/3',
        'Laravel 5.x',
        'Express.js',
        'Rest API',
        'JSON',
        'OpenCart 1.x/2.x',
        'Shopify',
        'Visual Basic 6.0',
        'VB .Net',
        'C/C++',
        'Angular',
        'Semantic UI',
        'Material UI',
        'React Bootstrap',
        'SASS & LESS',
        'MVC Architecture',
        'OOPS Concept',
        'Data Structure',
        'Algorithm'
    ];
?>
<section id="skills-section" class="skills-section section text-center">
    <h2 class="section-title">Professional Skills</h2>
    <div class="top-skills">
        <h3 class="subtitle">Top Skills</h3>
        <div class="row">
            <?php foreach ($topSkills as $skill) { ?>
                <div class="item col-xs-6 col-sm-3">
                    <div class="item-inner">
                        <div class="chart-easy-pie text-center">
                            <div class="chart-theme-1 chart" data-percent="<?= $skill['percent'] ?>">
                                <span><?= $skill['percent'] ?></span>%
                            </div>
                        </div>
                        <h4 class="skill-name"><?= $skill['name'] ?></h4>
                        <div class="level"><?= $skill['level'] ?>, <?= $skill['years'] ?> years</div>
                        <div class="desc"></div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    
    <div class="other-skills">
        <h3 class="subtitle">Other Skills</h3>
        <div class="misc-skills">
            <?php foreach ($otherSkills as $skill) { ?>
                <span class="skill-tag"><?= $skill ?></span>
            <?php } ?>
        </div>
    </div>
    
</section>