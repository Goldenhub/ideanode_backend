# intaspace

## A nest for idea collaboration

## Overview

Users can post ideas.
The idea is displayed on the SPACE, other users can view, like and comment on the idea.
An idea can be moved to LAB so it can be closely worked on by users who have indicated interest.
The owner of the idea can invite users to the lab.
An idea can only be moved to the owner's LAB from the SPACE when it has 20 or more likes.
When it is moved to the LAB as a Pre-Build, all the users who liked it will be invited to join the Pre-Build in the owner's LAB. They can accept or ignore.
ONLY users who accept will be able to see activities going on with that idea.

## Activities that can be performed includes

- Scheduling meetings on calendar (requires google signup)
- Upload documents and images
- Create task
- Assign task to Pre-Build members
- Change task status
- Reward task completion (wallet system or built-in reward system)
- Remove a member
- Delete a pre-build from the LAB
- Restore a Pre-Build (before 30 days of deletion)
- Leave a Lab

### Database Tables

- users
- ideas
- comments
- interests
- likes
- users_interests (reference table)
- ideas_interests (reference table)

### Relationships

- ideas > users // M:1
- comments > users // M:1
- comments > ideas // M:1
- likes > ideas // M:1
- likes > users // M:1
- users_interests > interests // M:1
- users_interest > user // M:1
- ideas_interests > ideas // M:1
- ideas_interests > interests // M:1

### Technologies

- PHP
- pgSQL
- Eloquent ORM
- PHPUnit
- Redis
- AWS (SNS, SES)
- NextJS
- Shadcn/TailwindCSS
- Redux Toolkit
