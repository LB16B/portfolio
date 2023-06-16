<template>
    <button  class="bth bth-warning bg-red-500">
        Like
    </button>

</template>

<script>
export default {
  methods: {
    addLike() {
      axios.post('/api/likes', {
        // 追加するデータや必要なパラメーターを指定
        paid_member_id: 1, // ユーザーID
        recipe_id: 1, // 投稿ID
      })
      .then(response => {
        console.log(response.data);
      })
      .catch(error => {
        console.error(error);
      });
    }
  }
}
</script>