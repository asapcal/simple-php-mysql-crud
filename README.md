<h3>A Simple CRUD Using PHP/MySQL and Docker for Testing</h3>

In this project, I dockerized a simple CRUD (Create, Read, Update, Delete) application using PHP, MySQL, and Docker.

Initially, this CRUD was built using XAMPP, but now it only requires Docker to run.

Instructions for use:

Install Docker: [Docker Installation Guide](https://docs.docker.com/get-docker/)

Build the app using: docker compose up --build --abort-on-container-exit --remove-orphans

Access the app in your preferred web browser. Access index.php: http://localhost:9000/

Access phpMyAdmin. phpMyAdmin: http://localhost:9001/

Kompose test:

Install kind: https://kind.sigs.k8s.io/docs/user/quick-start/

Run: kubectl apply -f . && kubectl get po && kubectl port-forward svc/phpenv 9000:9000

Access the app like in docker section

References and acknowledgments:
- https://www.simplilearn.com/tutorials/php-tutorial/php-with-sql
- https://enlear.academy/stop-using-xampp-a-step-by-step-guide-to-docker-for-php-and-mysql-b424f0a7ba41
- https://docs.docker.com/get-docker/
- https://www.apachefriends.org/pt_br/index.html
- https://www.youtube.com/watch?v=o_jVDLya6IE

:)
