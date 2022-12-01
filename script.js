// const { createApp } = Vue;

// createApp({
//   data() {
//     return {
//       todolist: [],
//       new_todo: "",
//     };
//   },
//   created() {
//     axios.get("server.php").then((resp) => {
//       this.todolist = resp.data;
//       // console.log(this.todolist);
//     });
//   },
// }).mount("#app");

const { createapp } = Vue;

createapp({
  data() {
    return {
      new_list: [],
      new_to_do: "",
    };
  },
  created() {
    axios.get("server.php").then((response) => {
      this.new_list = response.data;
    });
  },
  methods: {
    addTodo() {
      const data = {
        newTodo: this.new_to_do,
      };

      axios
        .post("server.php", data, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          this.new_list = resp.data;
          this.new_to_do = "";
        });
    },
  },
}).mount("#app");
