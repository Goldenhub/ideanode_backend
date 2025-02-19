# use Node.js base image
FROM node:18-alpine

# set working directory
WORKDIR /app

# copy the entire app
COPY package*.json ./

# install dependencies
RUN npm install

# copy the entire app
COPY . .

# Build and expose
RUN npm run build
EXPOSE 3000

CMD ["npm", "run", "dev"]