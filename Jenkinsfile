pipeline {
    agent any

    stages {
        stage('Clone') {
            steps {
                git branch: 'main', url: 'https://github.com/tra99/final_DevOp.git'
            }

        }
        stage('Composer'){
            steps{
                sh 'composer install'
            }
        }
        stage('Copy .env'){
            steps{
                sh 'cp .env.example .env'
            }
        }
        stage('App key'){
            steps{
                sh 'php artisan key:generate'
            }
        }
        stage('Create database.sqlite'){
            steps{
                 sh 'touch database/database.sqlite'
            }
        }
        stage('npm'){
            steps{
                sh 'npm install'
                sh 'npm run build'
            }
        }
        stage('test'){
            steps{
                sh 'php artisan test'
            }

            post {
                success {
                    mail(
                        subject : "Pipeline Successful",
                        body    : "The Jenkins pipeline has succuess",
                        to      : "tongsreng@itc.edu.kh"

                    )
                }
                failure {
                    mail(
                        subject : "Pipeline failed",
                        body    : "The Jenkins pipeline has failed",
                        to      : "tongsreng@itc.edu.kh"
                    )
                }

            }
        }
    }


}
