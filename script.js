const { createApp } = Vue;

createApp({
  data() {
    return {
      todolist: [],
      new_todo: "",
    };
  },
  created() {
    axios.get("server.php").then((resp) => {
      this.todolist = resp.data;
      console.log(this.todolist);
    });
  },
}).mount("#app");
