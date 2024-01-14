<template>
  <div class="calendar-date-indicator">Текущий месяц: {{ nameMonth }}</div>
</template>

<script>
export default {
  props: {
    selectedDate: {
      type: Object,
      required: true
    },
  },

  data() {
    return {
      nameMonth: '',
    }
  },

  computed: {
    selectedMonth() {
      console.log(typeof this.selectedDate.$M)

      return this.selectedDate.format("MMMM YYYY");
    }
  },

  methods: {
    renameMonths() {
      let numMonth = this.selectedDate.$M;

      switch (numMonth) {
        case 0:
          this.nameMonth = 'Январь';
          break;
        case 1:
          this.nameMonth = 'Февраль';
          break;
        case 2:
          this.nameMonth = 'Март';
          break;
        case 3:
          this.nameMonth = 'Апрель';
          break;
        case 4:
          this.nameMonth = 'Май';
          break;
        case 5:
          this.nameMonth = 'Июнь';
          break;
        case 6:
          this.nameMonth = 'Июль';
          break;
        case 7:
          this.nameMonth = 'Август';
          break;
        case 8:
          this.nameMonth = 'Сентябрь';
          break;
        case 9:
          this.nameMonth = 'Октябрь';
          break;
        case 10:
          this.nameMonth = 'Ноябрь';
          break;
        case 11:
          this.nameMonth = 'Декабрь';
          break;
      }
    }
  },
  beforeMount() {
    this.renameMonths()
  }
};
</script>

<style scoped>
.calendar-date-indicator {
  padding: 1rem;
  font-size: 24px;
  font-weight: 600;
  color: #1f6d17;
}
</style>