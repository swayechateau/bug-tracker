<template>
  <v-row justify="center">
    <v-dialog v-model="dialog" persistent max-width="600px">
      <template v-slot:activator="{ on, attrs }">
        <v-btn color="primary" dark text v-bind="attrs" v-on="on">
          Authenticate
        </v-btn>
      </template>
      <v-card
        ><v-container>
          <v-card-title>
            <h2 class="text-center">Authenticate</h2>
            <v-spacer></v-spacer>
            <v-btn icon text @click="dialog = false">
              <v-icon>md-close</v-icon>
            </v-btn>
          </v-card-title>
          <v-card-text>
            <v-row>
              <v-col cols="12">
                <v-text-field
                  label="Name*"
                  v-model="user.name"
                  required
                ></v-text-field>
              </v-col>

              <v-col cols="12">
                <v-text-field
                  label="Email*"
                  v-model="user.email"
                  required
                ></v-text-field>
              </v-col>
              <v-col cols="12">
                <v-text-field
                  label="Password*"
                  v-model="user.password"
                  type="password"
                  required
                ></v-text-field>
              </v-col>
            </v-row>

            <small>*indicates required field</small>
          </v-card-text>
          <v-card-actions>
            <v-btn color="blue darken-1" text @click="dialog = false">
              Register
            </v-btn>
            <v-spacer></v-spacer>
            <v-btn color="blue darken-1" text @click="dialog = false">
              Login
            </v-btn>
          </v-card-actions>
        </v-container>
      </v-card>
    </v-dialog>
  </v-row>
</template>

<script>
export default {
  data: () => ({
    dialog: false,
    user: {
      name: "",
      email: "",
      password: "",
    },
  }),
  mounted() {
    console.log("Auth Component mounted.");
  },
};
</script>
