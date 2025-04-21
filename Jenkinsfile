pipeline {
    agent any

    stages {
        stage('Cloner le dépôt') {
            steps {
                git 'https://github.com/Jocerak/guestbook.git'
            }
        }

        stage('Déploiement') {
            steps {
                sh '''
                    docker compose down
                    docker compose up -d --build
                '''
            }
        }
    }
}
