
<template>
  <v-container>
    <v-layout text-xs-center wrap>
      <v-flex xs12>
        <!-- 画像のプレビュー表示領域 -->
        <v-img :src="upimage.fileUrl" aspect-ratio="2" :contain="true"></v-img>
        <p>{{ upimage.fileName }}</p>
        <p>圧縮前サイズ(MB):{{ fileInfo.before.size }}</p>
        <p>圧縮後サイズ(MB):{{ fileInfo.after.size }}</p>
      </v-flex>
      <v-flex xs12>
        <!-- ファイルの選択 -->
        <input @change="selectedFile" type="file" accept="image/jpeg, image/jpg, image/png">
      </v-flex>
      <v-flex xs12>
        <!-- Submitボタン -->
        <v-btn color="primary" :disabled="isUploading">submit</v-btn>
      </v-flex>
    </v-layout>
  </v-container>
</template>
<script>
export default {
  data() {
    return {
      isUploading: false, // 画像ファイルアップロード中の判断フラグ
      upimage: { fileUrl: "", fileName: "", blob: null } // 画像ファイル
    };
  },
  methods: {
    async selectedFile(e) {
      // ファイル入力時の処理 
      // e.target.filesにファイルの情報が格納
    },
    async submit() {
      // 画像をサーバに送信する処理
    }
  }
};
</script>