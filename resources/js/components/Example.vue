<template>
   
<div class="card">
  <div class="card-header">
    <h4>
      Students
      <RouterLink to="/students/create" class="btn btn-primary float-right">Add Student</RouterLink>
    </h4>
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
<tr v-for="(student,index) in this.students" :key="index">
  <td>{{ student.id }}</td>
  <td>{{ student.name }}</td>
  <td>{{ student.password }}</td>
</tr>
            </tbody>
        </table>
        </div>
  </div>
</div>

  </template>
  
  <script>
  import axios from 'axios'
  
  export default {
    name: 'students',
    data(){
      return {
        students: []
      }
    },
    mounted(){
      this.getStudents();
      // console.log('maikol present')
    },
    methods: {
      getStudents(){
        axios.get('http/localhost:8000/api/students')
        .then(res => {
          console.log(res)
        });
      }
        },
  };
  </script>