# ideanest_backend

## A nest for idea collaboration

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

- NestJS
- TypeScript
- pgSQL
- Prisma ORM
- Redis
