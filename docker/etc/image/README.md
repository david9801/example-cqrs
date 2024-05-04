# Docker image for GitLab CI/CD pipelines

This project uses GitLab CI/CD integrated pipelines to run test and code coverage on several branches.
In order to reduce the time and resources used by this process a custom image is used.

To generate and push the image run the following commands:

- Login into GitLab container registry (you will be asked to enter your GitLab user and password):

```docker login registry.gitlab.com```

- Make any changes to ./Dockerfile and then build the image locally:

```docker build -t registry.gitlab.com/egate2021/egatebe .```

- Upload the new image to GitLab container repository:

```docker push registry.gitlab.com/egate2021/egatebe```

This will update the image with the tag `latest` in the repo, and will be used for the next job.
In case you want to set a different tag (for special testing or POC), you can do it by specifying it after the image name on the `build` and `push` commands. 

