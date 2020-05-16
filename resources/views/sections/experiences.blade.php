<?php
    $exps = [
        [
            'company' => [
                'name'      =>  'Nickelfox Technologies Pvt. Ltd.',
                'website'   =>    'https://nickelfox.com',
                'address'   =>  'Noida, U.P., India'
            ],
            'title'             =>  'Full Stack Developer',
            'responsibilies'    =>  [
                'Software development, prototyping and code reviews',
                'Develop web based e-commerce applications',
                'Design and develop database structure',
                'Setup Continuos Integration/Deployment (CI/CD)',
                'Assist software team in handling ongoing tasks as required'
            ],
            'dates'             =>  'Jul, 2018 - Present',
            'is_present'        =>  true
        ],
        [
            'company' => [
                'name'      =>  'Steelmint Info Services',
                'website'   =>    'https://steelmint.com',
                'address'   =>  'Raipur, Chhattisgarh, India'
            ],
            'title'             =>  'Web Developer',
            'responsibilies'    =>  [
                'Software development, prototyping and code reviews',
                'Develop web based e-commerce applications',
                'Design and develop database structure',
                'Testing, deployment, and maintenance of websites and applications',
                'Create RESTFUL apis for native mobile applications'
            ],
            'dates'             =>  'Jun, 2017 - Jun, 2018',
            'is_present'        =>  false
        ],
        [
            'company' => [
                'name'      =>  'Tailmill',
                'website'   =>    'http://www.tailmill.com',
                'address'   =>  'Noida, U.P., India'
            ],
            'title'             =>  'Lead Software Engineer',
            'responsibilies'    =>  [
                'Design, develop and implement applications that support day-to-day operations',
                'Provide innovative solutions to complex business problems',
                'Plan, develop and implement large-scale projects from conception to completion',
                'Develop and architect lifecycle of projects working on different technologies and platforms',
                'Interface with clients and gather business requirements and objectives',
                'Understand and evaluate complex data models',
                'Design, develop and implement new integration',
                'Execute system development and maintenance activities',
                'Develop solutions to improvise performance and scalability of systems',
                'Assist software team in handling ongoing tasks as required'
            ],
            'dates'             =>  'Jan, 2016 - Feb, 2017',
            'is_present'        =>  false
        ],
        [
            'company' => [
                'name'      =>  'Tailmill',
                'website'   =>    'http://www.tailmill.com',
                'address'   =>  'Noida, U.P., India'
            ],
            'title'             =>  'Full Stack Developer',
            'responsibilies'    =>  [
                'Evaluate, assess and recommend software and hardware solutions',
                'Develop software, architecture, specifications and technical interfaces',
                'Develop user interfaces and customer displays',
                'Design, initiate and handle technical designs and complex application features',
                'Develop, deliver and test software prototypes',
                'Build flexible data models and seamless integration points',
                'Innovate and develop high-value technology solutions to streamline processes',
                'Initiate and drive major changes in programs, procedures and methodology'
            ],
            'dates'             =>  'May, 2014 - Dec, 2015',
            'is_present'        =>  false
        ]
    ];
?>
<section id="experiences-section" class="experiences-section section">
    <h2 class="section-title">Work Experiences</h2>
    <div class="timeline">
        <?php foreach ($exps as $exp) { ?>
            <div class="item">
                <div class="work-place">
                    <h3 class="place"><a href="<?= $exp['company']['website'] ?>" target="_blank"><?= $exp['company']['name'] ?></a></h3>
                    <div class="location"><i class="fa fa-map-marker" aria-hidden="true"></i><?= $exp['company']['address'] ?></div>
                </div>
                <div class="job-meta">
                    <div class="title"><?= $exp['title'] ?></div>
                    <div class="time"><?= $exp['dates'] ?></div>
                </div>
                <div class="job-desc">
                    <p>As a <?= $exp['title'] ?> my roles and responsibilies <?= $exp['is_present'] ? 'are' : 'were' ?> as follows</p>
                    <ul>
                        <?php foreach ($exp['responsibilies'] as $r) { ?>
                            <li><?= $r ?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        <?php } ?>
    </div>
</section>