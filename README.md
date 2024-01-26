# ScyWhy Wordpress 
![Workflow-Badge](https://github.com/depgod/scywhy/actions/workflows/deploy.yml/badge.svg)

# ScyWhy Project

Demo Wordpress Template

## Table of Contents

- [Introduction](#introduction)
- [Getting Started](#getting-started)
  - [Prerequisites](#prerequisites)
  - [Installation](#installation)
- [Usage](#usage)
  - [Running Deployments](#running-deployments)
  - [Making Changes](#making-changes)
- [Contributing](#contributing)
- [License](#license)
- [Acknowledgements](#acknowledgements)

## Steps for local setup

Follow steps for replication:

1. **Install Git:**

  ```bash
  sudo apt install git
  or
  sudo dnf install git
  or
  sudo yum install git
  ```

2. **Configure Git:**

  ```bash
  git config --global user.name "Your Name"
  git config --global user.email "your.email@example.com"
  ```

3. **Configure to use personal access token:**

  ```bash
  git config --global credential.helper store
  ```

4. **Verify Git installation:**

  ```bash
  git --version
  git config --get user.name
  git config --get user.email
  ```

5. **Additional steps for cloning and contributing:**

   ```bash
   git clone https://depgod:<personal_access_token>@github.com/depgod/scywhy.git
   ```

6. **Navigate to the project directory:**

  ```bash
  cd scywhy
  ```

7. **Create a new branch for your changes:**

  ```bash
  git checkout -b main
  ```

8. **Make your changes in the code**
9. **Stage and commit your changes:**

  ```bash
  git add .
  git commit -m "Describe your changes here"
  ```

10. **Push your changes to github:**

  ```bash
  git push origin main
  ```

