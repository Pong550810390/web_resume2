<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <title>Resume</title>
    <link rel="stylesheet" href="/styles.css">
</head>
<body>
    <?php include 'resume_data.php'; ?>
    
    <div class="container">
    <aside class="sidebar">
            <nav>
                <ul>
                    
                    <li><a href="#information">Personal Information</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#experience">Activity</a></li>
                    <li><a href="#education">Education</a></li>
                    <li><a href="#skills">Skills</a></li>
                </ul>
            </nav>
        </aside>
    <main class="content">
        <header>
        <img src="/public/1.jpg" alt="image" class="image">
            <h1><?php echo $name; ?></h1>
            
        </header>
        <section id="about">
                <h2>About Me</h2>
                <p><?php echo $about; ?></p>
            </section>
        <section id="information">
        <section>
            <h2>Personal Information</h2>
            <p><?php echo "Name: ".$name; ?></p>
            <p><?php echo "Age: ".$age; ?></p>
            <p><?php echo "Sex: ".$Sex; ?></p>
            <p><?php echo "Email: " . $email; ?></p>
            <p><?php echo "Phone Number: ".$phone_number; ?></p>
            <P><?php echo "Address: ".$address; ?></P>
        </section>
        <section id="experience">
        <section>
            <h2>Activity</h2>
            <ul>
                <?php foreach ($activity as $job) : ?>
                    <li>
                        
                        <h3><?php echo $job['title']; ?> </h3>
                        <P><?php echo $job['Organizer']; ?><p>
                        <p><?php echo $job['date']; ?></p>
                        
                    </li>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="education">
        <section>

            <h2>Education</h2>
            <ul>
                <?php foreach ($education as $edu) : ?>
                    <div class="education-section">
                    <img src="<?php echo $edu['image']; ?>" alt="Education Image" class="education-image">
                    <div>
                        <h3><?php echo $edu['degree']; ?></h3>
                        <p><?php echo $edu['school']; ?></p>
                        <p><?php echo $edu['date']; ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </ul>
        </section>
        <section id="skills">
                <h2>Skills</h2>
                <ul>
                    <?php foreach ($skills as $skill) : ?>
                        <li><?php echo $skill; ?></li>
                    <?php endforeach; ?>
                </ul>
            </section>
    </main>
    </div>
</body>
</html>
